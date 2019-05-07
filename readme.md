#JUST STARTED

this API that I am building inorder to serve a client Application which is My personal webSite.

I have chosed to build this API in PHP/Lumen Laravel Framwork to advance my skills in PHP.

The API consists of a set number of endPoints which you can use to GET/POST requests to it.
At the moment we have 2 endPoints:

1- hostName/clients : this is a GET requests which retreives all the clients in the data Base
1- hostName/projects : this is a GET requests which retreives all the projects in the data Bas
Next I will working on Adding two POST requests as folow : 
....hostName/addclient with a JSON body as 
{
  "name" : "data",
  "surename" : "data",
  "email" : "data" // unique
  "password" : "data" // will ne hashed of course
  
  the response of this requests is a success only if the email is not in the DB. otherwise you get a response to resubmit the request.
