# ShopifyChallenge-Summer2021
Simple photo uploader application.

### Languages used
* HTML
* PHP
* CSS

## Focus of the project
The main focus of the project was to create a simple HTML form with validation capabilites using PHP and a photo gallery to showcase all pictures uploaded using the form.

## How to use
1. Download all files
1. Run submit.html
    
    From here you can either submit a photo or check out the gallery
    - Fill out the form to submit a picture into the gallery
    - Click on `Photo Gallery` to check the gallery
4. After filling out the form correctly and submitting, you will be redirected to an "Uploaded Successfully" page where you have the option to submit another photo or check the gallery
5. Once in the photo gallery you can go back into the submit form to upload more photos!

## Files description
- **submit.html:** Simple form created using HTML.
- **submit.php:** Form validation code written in PHP that will also give a success message to user when an upload was successful.
- **submissions folder:** Every time the user does a submission the pictures get saved into this folder. 
- **gallery.php:** Gallery page written with HTML and PHP, this code takes photos submitted into the submissions folder and displays them out for the user to see.
- **style.css:** CSS styling for all the pages.

## Further improvements
- Implement MySQL database for:
    - Login and sign up form with password authentication
    - Photo gallery with prices and other user inputs
    - Managing sales and invetory
- Add more capabilites:
    - Allow users to delete photos
    - Allow users to submit more than one picture at once
    - Discount customization
    
## Learning Outcomes
- Improvement using PHP
    - Retrieving files
    - Creating new HTML using PHP (Creating new divisions for pictures in gallery when more pictures are added)
- Improvement on JavaScript Objects (First attempt of project that was discarded)
- More familiarized with responsive web design (Use of a flex-box)
