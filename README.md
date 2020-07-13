This Project is created by using Slim microframework

Step For Using This Application 

1. Install composer on getcomposer.org
2. Clone this project by using https
3. Run Composer Install
4. Prepare for the database (for this case, I'm using xampp for the database server, but i've added command for using mysql in docker, so if you are using docker simply run docker-compose up -d to use the mysql server)
5. Create a database ( for this case, pricebook is my database name)
6. Run vendor\bin\phinx migrate to run a the migration to create the table
7. Run vendor\bin\phinx seed:run to run the seeds for data seeding
8. Composer start to use the application.
9. To test the http request, postmand or advance rest client are enable to be used

since i'm not using any apidoc generator
<br>GET api/product -> to get the product name, and the product have the product docummentation id, to make sure that the product will match with its recommendation

POST api/product -> to submit your product, and it will return your product recommendation

Why did i use slim?

slim has an amazing middleware support
and since slim is a microframework so it would not be overkilled like laravel or code igniter,since slim is used for creating a simple project
and basic concept for slim is really simple , unlike laravel or any other framework that use MVC, slim just accept HTTP Request	and turned it into HTTP response

but , there are the disadvantages for using slim

since slim is a microframework, it means it will be hard for using slim to create a big project
and because of slim's basic is just for accepting http request and turn it into http response, we need to do some extra jobs to make slim as MVC basic.

for the further step, we can improve the accuracy for the recommendation since i created a relationship between product and product recommendation, we can develop it into more advance, by adding category, storage, specs, and many others so we can classify many types of smartphone, and we can give customer many options that they can choose.