# Breadcrumb-for-Codeigniter
Breadcrumb plugin is a simple codeigniter plugin that help in generating breadcrumb...
_A “breadcrumb” (or “breadcrumb trail”) is a type of secondary navigation scheme that reveals the user's location in a website or Web application._

## Installation
* Copy and paste the Breadcrumb.php from the folder oof this project into the codeigniter library folder for your project i.e _project_name/application/libraries/_
* Copy and paste the file in configs/breadcrumb.php and paste it into your app's config folder i.e _project_name/application/config.php_
* Edit the breadcrumb.php file in the config folder to your test.
  Example of breadcrumb.php configuration script is shown below(Read the comments to know the right values to be assigned):
 ```
    <?php
        // Configurtion file
        defined('BASEPATH') or exit('Page access is not allowed');
        $config['includeHome'] = 'Home'; // Title for site/app's first page
        $config['divider'] = '&nbsp;&#62;&nbsp;'; // Crumb divider(default is " > ")
        $config['containerOpen'] = '<div class="breadcrumb">'; // Opening tag for Breadcrumb container
        $config['containerClose'] = '</div>'; // Closing tag for Breadcrumb container
        $config['crumbOpen'] = ''; // Opening tag for Crumb container
        $config['crumbClose'] = ''; // Closing tag for Crumb container
     ?>
  ```
  * Load your project into your script as show below:
  ```
    <?php
      $this->load->library('breadcrumb');
    ?>
 ```
   You can also autoload the library into your project by adding the breadcrumb to the config array from autoload.php in the     application/config folder as shown below
   ```
    <?php
      $autoload['libraries'] = array('breadcrumb');
     ?>
   ```
   If you have carefully followed the steps above, you have successfully set up the breadcrumb for codeigniter library and the commands below are now available for you to us:
   Setting Breadcrumb params
   ```
    <?php
      $this->breadcrumb->addCrumbs('param1', 
      param2',  'params'3, 'param4'); 
      \*
      \* The first parameter is 
      \* Second is 
      \* Third is 
      \*
    ?>
   ```
  After calling that function, you will have to call the showCrumbs() function immediately to show breadcrumb
  ```
    <?php
      $this->breadcrumb->showBreadCrumbs();
    ?>
  ```
  The showCrumbs function does not require any parameter. After calling the function, we are expected to have what is show below
  ```
    <?php
      $this->breadcrumb->addCrumbs(${parameters});
      $this->breadcrumb->showBreasCumb();
    ?>
  ```

# GUIDE IS CURRENTLY INCOMPLETE
