## Potential Errors

1. Error: XAMPP: Starting Apache…fail 

*Solution* - Restart Apache using `systemctl restart apache2.service`

2. Can't access phpMyAdmin because of host, username or password

*Verify settings in /config.inc.php file*

```
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['password'] = '';
$cfg['Servers'][$i]['port'] = '3306';
$cfg['Servers'][$i]['auth_type'] = 'config';
```

If root password in null set 
```
$cfg['Servers'][$i]['AllowNoPassword'] = true;
```