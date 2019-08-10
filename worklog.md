# Work Log#

A running list of daily work and tasks for the library lender.  Also it will include any specifics and details about this project.

|table of contents|
|-----------------|
|Introduction|
|change list|
|Daily Journal|
|Assets|

## Introduction
The main purpose and goal of this project is to learn a new skill and trait.  In my coding arsenal I am lacking in the full stack development area.  My back end is decent, my front end needs work, and putting them together is rough.  So I came up with this project to work on and challenge me in all areas.  In the case here, I am teaching myself the PHP framework Laravel for backend.  I am already familiar and good with the Python framework Flask, and I enjoy PHP so I thought time to learn something new.  Along with Laravel, I also intend to learn how to properly use SASS as well as Bootstrap.  I am comfortable with vanilla Javascript and CSS so this will be a good challenge for me.  When I learn a new skill, I do not like following cookie cutter videos and projects.  Where you input the code and reproduce their results.  I like to create my own projects and ideas.  This allows me to work through the problem solving, look at similar ideas and tweek them to my own needs.

The idea behind library lender is born from the combination of my home office and Michelle.  Michelle is an avid reader, and constantly has a book in her bag.  The office has 4 floor to ceiling book cases full of books.  So one day when she was both on facebook and talking to me about her book club, I thought why not combine them to make library lender.  It is similar to www.goodreads.com, but still independently different I think.

There are third party libraries for a lot for what I want to work on.  Things like users chatting, or reveiws I can use a third party add-on.  However, by using what comes native to Laravel, it makes more of a challenge for me.  When I can I like to avoid the third party add-ons to make things a bit more hard for me.

## change list
- [x] setup laravel server
 - runs on localhost:8000
- [x] setup landing page
 - basic page with a title and log-in and register buttons
- [x] create login page
 - basic log-in page with laravel setup
- [x] create registration page
 - basic page with laravel setup
- [x] setup user database(db)
- [x] setup user page
 - this page is what the user sees when the log in
- [x] setup book db
- [x] setup author db
- [x] create page where users add a book to their collection
 - [x] create a way for users to search for a book that they may not have
- [x] create page that shows what books are in the users collection
- [x] create page to show the details of each book
- [] create page for the user to add a review of their books
- [] allow users to mark books that they are reading *consider using a book mark or similar icon*
- [] allow users to mark their favorite books *consider using the basic star*
- [] create a way for users to like certain reviews
 - [] create a way for users to leave reveiws to comments
- [] create a user messenger system
 - [] using the previous messenger system use it to implement a book club chat feature
- [] allow users to request books be lent
 - [] allow users to accept/decline book lending requests
- [] allow users to review other users of book lending
- [] determine a design for the site and update .css file

### security  change list
- [] make sure that each person can only see their page
- [] double check and alert to multiple email addresses
- [] users can only upload books their page
- [] users can only edit their own reveiws
- [] make sure all inputs that are directly saved to the db are cleaned to avoid any potential sql attacks

## Daily Journal
8/1/19 
- Got back into the project after a short break for another project.  Setting up this document as well as another introduction document.  Both of these I hope will make me think through the project more clearly and see what needs to be done.
- reaquanted myself with the project so far.  Honestly wish I had thought about doing the before hand.  It would have made this part much easier.

8/2/19
- looked for ideas and inspriations about how to display the users books.  Along with a basic dispaly for the books I need to look at how to discern at a glance between read, reading, and want to read.

8/5/19
- I craeted a search box at the top of the page.  This will allow a user to search by title, author, subject or genre and then return a list of books that fit their description.
 - I got to max out at 20 titles per page.  It will also check to make sure that the author field is valid, if it isnt it will skip over that author.
 - I know can do the max the of 40 results for google, __why is it 40?__ Stuck on the pagination of the results.  I would like it idealy to show 10 results per page, with 4 pages.  I set up the pagination correct, and it works fine except for when I want to go to next page.  It looks like it wants to, but it goes to a different different page.

8/6/19
- Finally got the search results to work correctly.  So now Even though I get a result of 40 books total, I get 10 results on a page across 4 different pages.  When the user clicks on a title it then opens up another page with detailed information about that book.  The information page is formatted in an easy to read way.
 - **I need to look into using that blade format for the other book information, share one blade across multiple views**

8/10/19
- Created a seed function for the database.  This way anytime I do any updates to the data structure or delete a table to redo, I have all the information ready to go.  I currently have about 8 books saved along with 3 users that will give me enough to start working with.  As I add more things I will need to re-do the seeder to include the new stuff as well.

# Assets

Users table.  When you use the laravel built in login system, it will automatically create this table for you.  It comes with all the fields.  As this is a proto-type I have not made any adjustments.

|column|Type|
|------|----|
|id|int|
|name|varchar|
|email|varchar|
|email_verified_at|timestamp|
|password|varchar|
|created_at|timestamp|
|updated_at|timestamp|

user_data.  This table will store the more pertinement data for the users such as physical address.  This is added for the sole purpose of the book lending ability.

|column|Type|
|------|----|
|userId|int|
|user_street|varchar|
|user_apt|varchar|
|city|varchar|
|state|varchar|
|zipcode|timestamp|
|phone|timestamp|
|created_at|timestamp|
|updated_at|timestamp|

authors.  This table lists all the authors that are found within the site.

|column|Type|
|------|----|
|authorId|int|
|author_name|varchar|
|created_at|timestamp|
|updated_at|timestamp|

books.  This table holds all the data for the books that people upload.  When a user adds a new book, I use the google books api to search for and get the information.  That information is then populated into this table.

|column|Type|
|------|----|
|bookId|int|
|userId|int|
|authorId|int|
|title|varchar|
|isbn|varchar|
|description|blob|
|preview|varchar|
|cover|varcar|
|created_at|timestamp|
|updated_at|timestamp|


- you will notice that the tables all have a *crated_at* & *updated_at* column.  These are pre-populated by laravel when I build the tables.