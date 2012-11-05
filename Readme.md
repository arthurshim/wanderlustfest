# Wanderlustfestival.com gitrepo

Please open a ticket or a basecamp todo if you have trouble setting this up.

## Setup Howto
* Clone this repo
* Create a mysql database called wl_prod, check default/settings.php for username and passwords
* Import wl_prod.sql in the database
* Create a directory called fiels in the foler which has index.php
* Use the Apache2 VirtualHost settings provided below and modify it for your DocumentRoot

## Apache2 VirtualHost settings
````
<VirtualHost *:80>
        ServerAdmin webmaster@localhost
        ServerName www.wanderfest.com
        ServerAlias *.wanderfest.com wanderfest.com
        DocumentRoot /home/wanderlust/Wanderlust
        <Directory />
                Options FollowSymLinks
                AllowOverride None
        </Directory>
        <Directory /home/wanderlust/Wanderlust>
                Options Indexes FollowSymLinks MultiViews
                AllowOverride All
                Order allow,deny
                allow from all
        </Directory>


        ProxyPass /files http://www.wanderlustfestival.com/files
        ProxyPassReverse /files http://www.wanderlustfestival.com/files

        ErrorLog /var/log/apache2/wanderlust-error.log

        # Possible values include: debug, info, notice, warn, error, crit,
        # alert, emerg.
        LogLevel warn

        CustomLog /var/log/apache2/wanderlust-access.log combined

</VirtualHost>
````
