# ControlCodeJsonSwitch plugin for CakePHP

Quick switch to json representation of any view variables.

## Use case

Just add `?json` to the url to get the json data behind a view to request it through ajax pagination.

[Demo site](http://cakephp.control-code.com/)

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require controlcode/cakephp-json-switch
```

## Usage
Pass GET parameters json to view the json representation of all the variables used in the current view

## Example
- Show the json representation

`http://www.example.com/?json`

- Get the json+ld tag

`http://www.example.com/?ldjson`
