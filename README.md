This Project is created by using Slim microframework

Step For Using This Applicatio 

1. Install composer on getcomposer.org
2. Clone this project
3. Run Composer Install
4. Prepare for the database (for this case, I'm using xampp for the database server, but i've added command for using mysql in docker, so if you are using docker simply run docker-compose up -d to use the mysql server)
5. Create a database ( for this case, pricebook is my database name)
6. Run vendor\bin\phinx migrate to run a the migration to create the table
7. Run vendor\bin\phinx seed:run to run the seeds for data seeding
8. Composer start to use the application.
9. To test the http request, postmand or advance rest client are enable to be used