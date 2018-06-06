# Breadcrumb for Codeigniter

[![Made in Nigeria](https://img.shields.io/badge/made%20in-nigeria-008751.svg)](https://github.com/acekyd/made-in-nigeria)

> Lightweight Codeigniter library for generating HTML breadcrumb

## Usage
A library that is very easy to understand and use was one of our major considerations while writing this library. In that sense, using this simple library has no pain to face ranging from adding and update of config file, to loading of the library and usage.  
Follow the steps below to setup this library in your project:  
* Copy the `breadcrumb.php` file in the config folder and paste in `application/config` folder in your project  
* Copy and paste the `Breadcrumb.php` file in the libraries folder to the `application/libraries` folder of your project
* Load the library into your project by adding the piece of code below to the controller set for it
```php
    $this->load->library('breadcrumb');
```
Codeigniter allows you to autoload libraries, configs etc, so you can also autoload this library by adding `breadcrumb` to your libraries array in the `config/autoload.php` file of your project
* To generate breadcrumb, call the `add()` method to add crumb and the `show()` method to output the breadcrumb as shown below  
```php
    $this->breadcrumb->add('Home', '/');
    $this->breadcrumb->add('Pages', '/pages');
    $this->breadcrumb->add('About', '/pages/about');
    $this->breadcrumb->show();
```
The about code will generate the html code below
```html
    <div class="breadcrumb">
        <a href="/">Home</a>&nbsp;&#62;&nbsp;
        <a href="/pages">Pages</a>&nbsp;&#62;&nbsp;
        <a href="/pages/about">About</a>
    </div>
```
**Output**  
[Home](/) > [Pages](/pages) > [About](/pages/about)  

*You can also configure the library via the `breadcrumb.php` file in the `application/config` folder. This file allows you to set crumb divider, crumb opening and closing tag, breadcrumb opening and closing tag and crumb for your index page which is usually the homepage*

## Issues and Contribution
This is an open source project, feel free to create issues, submit pull requests to make corrections, enhance functionality etc

## How can you support me?
That's very easy. Just use the library in your projects, help me share with other and of course, star the repository.  
*You can also follow me on twitter [@iamuchejude](https://twitter.com/iamuchejude). Thank you.*

## Author
**Uche Jude**
* [github/iamuchejude](https://github.com/iamuchejude)
* [twitter/iamuchejude](https://twitter.com/iamuchejude)

## License
MIT © [Uche Jude](http://github.com/iamuchejude)
