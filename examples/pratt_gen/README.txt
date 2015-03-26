NaviStax for Millenium 

This group of files generates the scripts necessary to implement NaviStax
into the Millenium catalog interface. This is primarily for instances when
scripts cannot be inserted into the record display template. When only static
html is permitted, an html button can be inserted that calls the script
on another server. This will likely work with many other catalog 
interfaces with modifications to the getBooks function. 

Requirements:
Server with PHP 5.4 or later
Python 2.7 on client


Instructions:
1. Create gif images and put them in the img directory.
2. Update ranges.txt with the call number ranges and image file names.
	a. enter all possible locations exactly as they appear in the location field of the interface
	b. in this implementation, <tr  class="bibItemsEntry"> is used to identify the location field. The child elements
		(found using simple_html_dom) are assigned to the location and call number variables.
		1. You may need to change the number of the child element, since some implementations shift the order around.
3.  Run generate.py 
4. Upload files (only index.php and the img folder are necessary) to the server
5. Add html such as this to the record display template, substituting the current location of the file:
		<form action="http://lib-dev.pratt.edu/catmap/index.php" method="post" >
				  <input type="submit" id="submit" name="submit" 
				  value="Find on the shelf" />
		</form> 
	 
