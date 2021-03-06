# Twig

It is a simple fast and secure template engine for php. In this small project, the application of Twig for rendering different elements of an array of items is investigated. When it comes to template engines in PHP, many people will tell you that PHP itself is a template engine. But even if PHP started its life as a template language, it did not evolve like one in the recent years. As a matter of fact, it doesn't support many features modern template engines should have nowadays:
* Concise: The PHP language is verbose and becomes ridiculously verbose when it comes to output escaping:
````PhP
<?php echo $var ?>
<?php echo htmlspecialchars($var, ENT_QUOTES, 'UTF-8') ?>
````
````twig
{{ var }}
{{ var|escape }}
{{ var|e }}         {# shortcut to escape a variable #}
````
* Template oriented syntax: Twig has shortcuts for common patterns, like having a default text displayed when you iterate over an empty array:
````twig
{% for user in users %}
    * {{ user.name }}
{% else %}
    No users have been found.
{% endfor %}
````
The main functionalities of twig being investigated are;
* [blocks](https://twig.symfony.com/doc/2.x/functions/block.html): They are one of the main functionalites of twig being investigated. Their utility is big when it comes to rendering pages
* [Macros](https://www.branchcms.com/learn/docs/developer/twig/tags/item/macro):acros are similar to functions within regular programing languages. They are often used to output reusable HTML code.

For better understandig of the twig template engine, the following links could be explored:
* [Tutorial](https://youtu.be/b_eU962en2k)
* [Documentation](https://twig.symfony.com/)

This project also includes a presentation explaining the things learned.
