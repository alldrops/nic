# New Image College - website theme

### Executing the project
In order to run the project and be able to edit the source files correctly, the user must navigate to the theme root folder (wp-content/themes/nic/) and do the following:

npm install (first run only)
bower install (first run only)
gulp

Edit only sass files, not css directly

### Departments configuration
Programs > Departments
Select department image and colour in hex (i.e. #aaaaaa)

### Post types
Posts are now divided into 3 main categories: NIC Talks, Bring On The Success and Campus Life.
For each of those there is a custom post type in the admin panel. No other categories must be created (Acting, Makeup...)

### Importing content
To import the content, just run the wordpress importer using the xml file located inside the theme folder
wp-content/themes/nic/xml/nic-bp.xml

### Work rights
All the work rights developed in this project (design and code) belong to the owner of this repo (Andre Lopes) and is not subject to use for any person, agent or company unless given prior authorization.