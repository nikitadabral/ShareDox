![Logo](https://raw.githubusercontent.com/nikitadabral/ShareDox/master/ShareDoxLOGO.jpg )
                                                                                                     
# ShareDox
A simple document collabration website to edit your articles,reports .,etc together with the team.

# Features
1. User Authentication
2. User Authorization
3. Multiple User can edit same document
4. Peope currently viewing the document
5. Information on users currently viewing the document
6. People who viewed the document in past

# Application Flow Diagram
![Application Flow Diag](https://raw.githubusercontent.com/nikitadabral/ShareDox/master/ApplicationFlowDiag.png)
 

# Scheme Info
```mysql
username: root
password:''

//create db
create database user;

//create table
create table user_info(id int(11) PRIMARY KEY AUTO_INCREMENT,
firstname varchar(255),lastname varchar(255),email varchar(255),
password varchar(255),is_active_doc1 text default 'off',is_active_doc2 text default 'off');
```


Hosted on - [Hosting Soon](https://github.com/nikitadabral/ShareDox)
