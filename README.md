<p align="center"><img src="./src/icon.svg" width="100" height="100" alt="Redactor Font Awesome List icon"></p>

# Redactor Font Awesome List

This redactor plugin allows you to add Font Awesome icons as markers for your redactor lists.

Will generate HTML through a simple icon picker:

```html
<ul class="fa-ul">
    <li><span class="fa-li"><i class="fas fa-check"></i></span> List item 1</li>
    <li><span class="fa-li"><i class="fas fa-check"></i></span> List item 2</li>
    <li><span class="fa-li"><i class="fas fa-times"></i></span> List item 3</li>
</ul>
```
    
## Requirements
This plugin requires Craft CMS 3.1 or later as well as the [Craft Redactor plugin](https://github.com/craftcms/redactor) v2.0 or later.

## Installation
You can download and install this plugin with Composer.

Open your terminal and run the following commands:

```bash
# go to the project directory
cd /path/to/my-project

# tell Composer to load the plugin
composer require cbp/redactor-fa-list

# tell Craft to install the plugin
./craft install/plugin redactor-fa-list
```

## Adding to your Redactor fields
Include the plugin in your Redactor config file located in craft/config/redactor/-your-config-file-.json. To do so, add 'fa-list' in the plugins array:

```json
{
  "buttons": ["html"],
  "plugins": ["fullscreen", "falist"]
}
```

**NOTE:** Don't forget to include font awesome on your front-end.