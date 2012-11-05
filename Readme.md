# Wanderlustfestival.com gitrepo

Please open a ticket or a basecamp todo if you have trouble setting this up.

## Apache2 VirtualHost settings
`
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
                AllowOverride None
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
`
