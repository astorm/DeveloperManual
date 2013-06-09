DeveloperManual
===============

A Magento module for browsing block action methods, PHP Doc blocks, and more!

###Developer Manual

The Developer Manual extension allows you to, in real time, query your system for which action methods are available via a particular block tag.  Additional reference materials are planned. 

Original Blog Post: http://alanstorm.com/magento_action_layout_reference

###Build Instructions

The `build_developer_manual.bash` file is a bash script that will create a simple tar archive of the extension files. 

    $ ./build_developer_manual.bash
    
This script assumes the existence of a `var` folder.    

The `magento-tar-to-connect.developermanual.php` file is a configuration file for the <a href="https://github.com/astorm/MagentoTarToConnect/">MagentoTarToConnect</a> command-line script.  This will allow you to build a Magento Connect 2.0 extension with the following.

    $ magento-tar-to-connect.phar magento-tar-to-connect.developermanual.php
    
See the <a href="https://github.com/astorm/MagentoTarToConnect/#readme">MagentoTarToConnect README.md</a> for more information on how this tool works.     