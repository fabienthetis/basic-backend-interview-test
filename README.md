mcmakler test for backend interview
==================

A Symfony project created on October 17, 2017, 11:23 am.


####Database

In this example we choose a Mysql Database.



You need to create a database with the name  "mcmakler_data"

You need to import the file present at the racine of the project and with the name mcmakler_data_2017-10-17.sql

The table neo will have the follwing structure: 

id : (int) 
date_value : (date) 
reference : (int 11)
name_value: (varchar 30 )
speed : ( float)
is_hazardous ( int 1)

##### Mongodb


It was also possible to use a mongodb instance to save collection with the 

php composer.phar update doctrine/mongodb-odm-bundle



###Configuration and run the server


Database Configuration : 

The database used in this example is : "mcmakler_data"

The table used will be "neo"


Command to run the example Symfony 3 : php bin/console server:run


LIST OF API AVAILABLE
=====


The following API are available running this project: 


####API 1 

url : http://127.0.0.1:8000/
response : {"hello":"world!"}


####API 2

url : http://127.0.0.1:8000/neo/store_data?reference_date=2016-10-10

parameter: the parameter reference_date is optional .

the current date will be take if not set.
it is used to have the possibility to store data from other years

response: 
{
    "status": 200,
    "message": "set of data neo in database done",
    "count": 44
}

count is the number of new record 

####API 3

 
url : http://127.0.0.1:8000/neo/hazardous

example of response: 

[
    {
        "id": "47",
        "date_value": "2017-10-13",
        "reference": "3694987",
        "name_value": "(2014 UR116)",
        "speed": "20.7815",
        "is_hazardous": "1"
    }
]

The response contains all the items in the database



####API 4

 
url : http://127.0.0.1:8000/neo/fastest?hazardous=false


example of response: 

{
    "id": "580",
    "date_value": "2016-10-03",
    "reference": "2105140",
    "name_value": "105140 (2000 NL10)",
    "speed": "38.1126",
    "is_hazardous": "0"
}

The response contains the fastest asteroid

####API 5

 
url : http://127.0.0.1:8000/neo/best-year?hazardous=true


example of response: 

{
    "count_neo": "6",
    "best_year": "2017"
}

The response contains the best_year and the number of neo for this year


####API 6

 
url : http://127.0.0.1:8000/neo/best-month?hazardous=true


example of response: 

{
    "count_neo": "121",
    "best_month": "10",
    "name_month": "October"
}

The response contains the best_month, the number of neo for this month and the string of this month






Test with phpunit
======


We use the package simple-phpunit to test
 
The command to run test is: 

 ./vendor/bin/simple-phpunit



####Test Files

2 files for test are created in the folder tests : 

-DefaultControllerTest.php
-StoreControllerTest.php


Target of the test:

the test will cover all the api we created and will check that the result is correct
doing a check of the json response .

The tests are calling all the created API and check that the json response , the http code and the content of the response is correct.

Al the created test where done and passed.OK (6 tests, 30 assertions)
