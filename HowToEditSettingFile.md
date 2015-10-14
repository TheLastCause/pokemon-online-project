# Introduction #

In the page, I will explain step by step on how to edit the settings file.


# Details #

There is 2 ways to edit the settings file.

### 1st way: ###

1. Open the include directory

2. There should be a file called settings.php. You can open this file with any text editor. I recommend you to use notepad++ for windows. For mac, use TextWrangler. Linux user can use gedit

3. Edit the variables needed

### 2nd way, assuming you have made a connection with MySQL database: ###

1. Go to the index page

2. Login as admin

3. click on "edit website setting"

4. You have now enter the editor

This [article](https://code.google.com/p/pokemon-online-project/wiki/DatabaseSetup) will help you setup the database.


## Default value ##

| **Variables** | **Dafault Value** |
|:--------------|:------------------|
| $host         | localhost         |
| $username     | root              |
| $password     | password          |
| $db\_name     | Pokemon\_online   |
|               |                   |
| $devEmail     | krisna@krisnaslife.cu.cc |
| $GameName     | Pokemon Online Project |
| $showAds      | false             |
| $pagetitle    |                   |
| $AdsenseCode  | `<img src="image/AddTopDummy.png" width="100%" height="100%">` |
| $Currency     | Coin              |

Too lazy to reset the settings manually? Get them from this [page](https://code.google.com/p/pokemon-online-project/source/browse/include/settings.php).


## Variable Description ##

| **Variables** | **Description** |
|:--------------|:----------------|
| $host         | Host for database |
| $username     | Database username |
| $password     | database password |
| $db\_name     | database name   |
|               |                 |
| $devEmail     | your email/for contact |
| $GameName     | what the variable says |
| $showAds      | show or hide ads |
| $pagetitle    | custom title for pages |
| $AdsenseCode  | your google adsense code |
| $Currency     | Ingame curency name |