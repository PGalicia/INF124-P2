Group Members:
  - Patrick Galicia (ID# 61968926)
  - Raj Robin (ID# 30492300)

URL: http://centaurus-2.ics.uci.edu:8927/INF-124---PA-1-master/home.html

Navigation:
  When you access the homepage, you see three links above: the logo, HOME button, and ABOUT button. Both the logo
and the HOME button will lead to the homepage, while ABOUT will lead users to our ABOUT page. Scrolling down will lead
users to our list of products, each products are clickable and when pressed it will lead you to the product's
corresponding product page where you have the option to buy the product. In the product page, when you clicked BUY
text fields will appear where users can input info to buy the product. Completing the order will launch the user's
email client.
  
Requirements: 
1. An overview of your business, the products you sell, the management team, and any other information that you think makes sense for the customers to know about your company.
	- You can see an overview of our company on our ABOUT page, which includes the    
      management team, and
	  the products we sell.

2. Display a list of products (at least 10) available for sale in a table with multiple rows and column, where 
   each product is shown within a separate cell.
	- On our homepage, there are 10 product listed in a table format. In addition, the number of rows and col
	  is determined by the size of your window. 

3. Display an image for each product available for sale in each cell.
	- Images can be seen both the homepage and product page.

4. Display the price and other key information (e.g., color, material, etc.) associated with each product in 
   the corresponding table cell.
	- The name, price, and category (either HERO or VILLAIN in this case) are shown below each of its
	  corresponding image.

5. The user should be able to choose a product from this table by clicking on the corresponding image, which 
   should lead to a new page that provides additional details about the product, e.g., more images, detailed 
   description, etc.
	- Each product on the homepage are clickable and when pressed it will link the user to the corresponding
	  product page. In the product page, users can see more information about the selected product such as
	  it's dimension, and weight.

6. On the detailed description page, the user should be able to order a product by filling a form. The form 
   should allow the user to enter the product identifier, quantity, first name, last name, phone number, shipping 
   address, shipping method (e.g., overnight, 2-days expedited, 6-days ground), credit card information, and 
   anything else that you think makes sense for your business.
	- When the user press the BUY button located at the bottom of each product page. A form will appear below
	  where the user needs to put in her billing, payment, and shipping information.

7. Upon submitting the form, the website should send an email with the purchase order information included in 
   the body of the email. Note that to send an email, one needs to connect to the SMTP server, which is not 
   possible with the client side software. Thus, this requirement simply requires bringing up the email client 
   with the purchase order information included in the body of the email and allowing the user to send the email. 
	- After the user enter all the necessary infomation to buy the product, he/she can press CHECKOUT button
 	  and it launch the email client where the TO, SuBJECT, and BODY filled out with the information they entered.
	- NOTE: Make sure that the user actually has an email client such as MAIL for this to work.

8. Before submitting the form, it should be checked for proper formatting, including whether all fields are 
   filled properly, whether the phone number, address, and credit card are properly formatted, etc. An alarm 
   should be raised if a field is empty or not properly formatted to prevent submission of bad data. 
	- Each input fields on the product page, wil check for proper formatting. If the information entered is in the valid format, there will be a green border:
		- NAMES (Full Name and Cardholder Name): Checks that each characters are valid
		  letters.
		- EMAIL: Checks to see that the inputted text follow the email
		  pattern e.g. something.something@something.something.
		- CITY: Checks the entered text to be only letters.
		- STATES: Checks the entered text to be only letters with a length of two.
		- ZIP CODE: Checks the entered text to be only numbers with a length of five.
		- CARD NUMBER: Checks the entered text to be only numbers with a length of 16.
		- EXP MONTH: Checks the entered text to be a valid month (numbers between 1- 12)
		- EXP YEAR: Checks the entered text to be only numbers with a length of four.
		- CVV: Checks the entered text to be only numbers with a length of three.
		- PHONE NUMBER: Checks the entered text to be only numbers with a length of 10.
		- No formatting for:
			- STREET ADDRESS

9. Your website should use CSS to specify at least 10 stylistic properties for your website, such as the 
   background for your table, the color and size of your font, the size of your images, and other stylistic 
   preferences you may have.
	- To list a few:
		- Font Color
		- Font Weight
		- Font Family
		- Padding
		- Margin
		- Image Size
		- Background Color (Button)
		- Display (ways to display div = None, Block, etc)
		- Text Align
		- Text Decoration (Links)

10. Provide the ability to track the mouse movement, such that when the mouse moves over a product image,
    the size of the image is increased, and when the mouse moves out, the size of the image is returned back
    to normal. This feature can be implemented on either the page that displays the various products, or on
    the pages that show the details of each product, or both.
		- On our homepage, when you hover your mouse on the images, it gets bigger.
		- Similarly on our product page, when you hover your mouse on certain links or buttons it 
		  either shows a small animation, or changes color.