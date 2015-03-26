#!/usr/bin/python

##generate.py

## Part of the NaviStax program,
##this file is used to generate
##the getMap.php file for the EDS implementation of the NaviStax feature
##and the modranges.txt file used to build it.
##usage: python generate.py

##requirements: ranges.txt must be in same directory


import csv
import json
import re

modwriter = csv.writer(open('modranges.txt', 'wb'), delimiter='\t')


#first run through the ranges files to fill in call numbers so they can be formatted
#the sort function needs 1-3 letters followed by 
with open('ranges.txt', 'r+') as rwcsv:
    reader = csv.reader(rwcsv, delimiter='\t')
    for row in reader:
        #if it's a range
        if(row[0] == '#'):
            cnBegin = row[3]
            cnEnd = row[4]
            #if the beginning call number contains no numbers
            if(re.search('\d+',cnBegin) < 1):
                #add 000
               cnBegin = cnBegin + ' 000'
               #print cnBegin
               row[3] = cnBegin
            if(re.search('\d+',cnEnd) < 1):
                #add 9999
               cnEnd = cnEnd + ' 9999'
               print cnEnd
               row[4] = cnEnd
               
            #if the end call number contains no numbers
        modwriter.writerow(row)
            
rwcsv.close()



 #define output file - script to choose function based on location
o_f = open("getMap.php", "w")


#write the beginning of the php file that gets the call number and outputs html
o_f.write("<?php\n\n")
#include the php sort file
o_f.write('include("sortLCC.php");\n')

o_f.write('class stdObject {\n\tpublic function __construct(array $arguments = array()) {\n')
o_f.write('        if (!empty($arguments)) {\n')
o_f.write('            foreach ($arguments as $property => $argument) {\n')
o_f.write('                $this->{$property} = $argument;\n')
o_f.write('            }\n')
o_f.write('        }\n')
o_f.write('    }\n')

o_f.write('   public function __call($method, $arguments) {\n')
o_f.write('        $arguments = array_merge(array("stdObject" => $this), $arguments); // Note: method argument 0 will always referred to the main class ($this).\n')
o_f.write('        if (isset($this->{$method}) && is_callable($this->{$method})) {\n')
o_f.write('            return call_user_func_array($this->{$method}, $arguments);\n')
o_f.write('        } else {\n')
o_f.write('            throw new Exception("Fatal error: Call to undefined method stdObject::{$method}()");\n')
o_f.write('        }\n')
o_f.write('    }\n')
o_f.write('}\n') 

o_f.write('//variables passed in from linx.js\n')

o_f.write("$callNum = htmlspecialchars($_GET[\"callNum\"]);\n$loc = htmlspecialchars($_GET[\"loc\"]);\n")

o_f.write('$subCall = NormalizeLC($callNum);\n\n')
o_f.write("//result page that is displayed when user clicks on a link\nprint \"<html>\";\nprint \"<head>\";\n")

o_f.write("print \"<style>\";\nprint \"p {font: 18px/20px verdana, sans-serif;}\";\n")

o_f.write("print \".main {margin-left: auto;\n\t\t margin-right:auto;\n\t\twidth: 50%;};\n\tform {border: 0;}\n\timg {margin-top: 15px;}\n\tdiv {border: 0;}\n")

o_f.write("\tdiv#error {margin-left:auto;\n\t\t text-align:center;\n\t\tmargin-right:auto;}\n\t\tdiv#helpText p{margin-left:auto;\n\t\ttext-align:center;\n\t\tmargin-right:auto;}\n}\";")
 
o_f.write("\nprint \"</style>\";\nprint \"<body>\";\nprint '<div class=\"main\">';\n")

o_f.write('//define locations array\n')

o_f.write('//declare an object for each location and populate it')

i = 0

#loop through the csv file and write the locations file
with open('modranges.txt', 'r') as csvfile:
    reader = csv.reader(csvfile, delimiter='\t')
   
    for row in reader:
        
        #if it's a library
        if(row[0] == '!'):
            libName = row[1]
            
        #if it's a location
        elif(row[0] == '!!'):
        
            #escape apostrophes with json.dumps
            loc = row[2]
            loc = json.dumps(loc)
            
        #if it's a range
        elif(row[0] == '#'):
            print (libName + ' ' + loc + ' ' + row[3] + ' ' + row[4] + ' ' + row[5])
            beginCallNum = row[3]
            endCallNum = row[4]
            imageFile = row[5]
            o_f.write('//location ' + loc + ' ' + beginCallNum + ' - ' + endCallNum + '\n')
            o_f.write('\t$locObj' + str(i) + '= new stdObject();\n')
            o_f.write("\t$locObj" + str(i) + "->libName = '" + libName + "';\n")
            #use double quotes for location to accomodate apostrophes
            o_f.write("\t$locObj" + str(i) + "->location = " + loc + ";\n")
            o_f.write("\t$locObj" + str(i) + "->callNumBegin = '" + beginCallNum + "';\n")
            o_f.write("\t$locObj" + str(i) + "->callNumEnd = '" + endCallNum + "';\n")
            o_f.write("\t$locObj" + str(i) + "->imageFile = '" + imageFile + "';\n")
            i = i + 1 #to count the number of objects
            o_f.write('\n\n')

o_f.write('//put all objects in an array \n')

o_f.write('\t$locArray = array(\n')

for j in range(0, i):
    o_f.write('\t\t' + str(j) + ' => $locObj' + str(j) + ',\n')
    
o_f.write('\t\t);\n\n')

o_f.write('//begin checking for locations\n')
o_f.write('\t//variable to indicate that a match has been found\n')
o_f.write('\t$foundFlag = 0;\n')
o_f.write('\tforeach ($locArray as $locValue => $cur){\n\n')
o_f.write('\t\t//iterate through each location object and if a match is found, display the map\n')
o_f.write('\t\tif (($cur->location === $loc)&& ($subCall >= $cur->callNumBegin) && ($subCall < $cur->callNumEnd)) {\n')
o_f.write("\t\t	 print '<p>Call number <span style=\"color: #FF6666;\">' . $callNum . '</span> is located: ' . $cur->location . '.</p>';\n")
o_f.write("\t\t  print '<img src=\"img/' . $cur->imageFile . '\"/><br />';\n")
o_f.write('\t\t  $foundFlag = 1;\n')
o_f.write('\t\t}\n\n')
o_f.write('\t}\n\n')
o_f.write('	//if no match is found, display error message\n')
o_f.write('\t\tif($foundFlag === 0) {\n')
o_f.write("\t\t\tprint '<p>Could not find this item. Please ask a librarian for assistance.</p>';\n")
o_f.write('\t\t}\n\n')
o_f.write('//end location check\n\n')
o_f.write('//text to print link to ask a librarian\n')
o_f.write('    print\'<div id="helpText">\';\n')
o_f.write('    print\'<p>Questions? <a href="http://library.illinoisstate.edu/library-materials/ask/index.php">Ask a Librarian</a>.</p>\';\n')
o_f.write('        print\'</div>\';\n //end help link div\n')
o_f.write('    $pageURL = $_SERVER[\'QUERY_STRING\'];\n')
o_f.write('    /*button to report an error*/\n')
o_f.write('    print\'<div id="error">\';\n')
o_f.write('    print\'<form action="sendError.php" method="POST">\';\n');
o_f.write('    print\'<input type="hidden" name="pageURL" value="\' . $pageURL . \'"/>\';\n');
o_f.write('    	    print\'<input type="submit" value="report an error" />\';\n');          
o_f.write('    		print\'</form>\';');
o_f.write('	print "</div>";\n\tprint "</body>";\n\tprint "</html>";\n')
o_f.write("\n?>")
o_f.close()
