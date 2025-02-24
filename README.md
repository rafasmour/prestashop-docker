# prestashop-docker
A prestashop docker installation to test prestashop

## prequisites
1. docker
2. docker-compose
3. git

## setup
1. clone the repository
2. rename ```.env.sample``` to ```.env```
3. change the values in ```.env``` file
4. run ```docker-compose -f compose-dev.yml up -d```
5. open the browser and go to ```http://172.22.0.3/admin_route```
6. login with your credentials
7. Shop Parameters > Traffic & SEO > Set shop URL 
8. change ```172.22.0.3:80``` to ```172.22.0.3```

## goals
1. [X] install prestashop using docker
2. [X] look around the database
3. [X] look getting-started
4. [X] look hummingbird theme
5. [X] Read about hooks
6. [X] Create a child themes
7. [X] Look templates
8. [X] look creation module
9. [X] look Payment API
10. [X] Look Carrier module creation
11. [X] Look User guide