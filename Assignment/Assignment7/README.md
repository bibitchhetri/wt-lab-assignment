# Getting started with XAMP/MAMP(for macOS)

## What is MAMP?

Web development. PHP | Perl | Python. The name MAMP is an acronym that stems from the names of the components of the system: macOS (the operating system); Apache (the web server); MySQL or MariaDB (the database management system); and PHP, Perl, or Python (programming languages used for web development).

### Install  on macOS
`brew install MAMP`

### Creating Virtual Host
1. Include local host in httpd.conf
![screen sort](./images/configByIncludeVhosts.png)

1. Listen port 80 in in httpd.conf
![screen sort](./images/listenPort80.png)

1. Add new local host( i.e hello.local & second.local ) on file system /etc/hosts
![screen sort](./images/includeVhost.png)

1. Launch MAMP and Start Local Server
![screen sort](./images/startMAMP.png)

1. Set port 80 for XAMP
![screen sort](./images/setMAMPport80.png)

1. Surfe for (https://local.host) and (https://second.local)
![screen sort](./images/hello.local.png)
![screen sort](./images/second.local.png)

# php Overview 
``` 
<?php
    echo "Hello World!" 
?>
```
1. php code starts with <?pht and ends with ?>
1. echo helps to print in the browser screen