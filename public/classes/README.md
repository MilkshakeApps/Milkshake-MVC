# Milkshake-MVC
Minimalist MVC Framework written in PHP and contains Bootstrap

I only tested this using Apache web server.  .htaccess file may need tweaking for other web servers.

How it works
---

Controller classes have action methods, action methods can be prefixed with "post_" for post actions

Model classes are initialized in Controllers.  You can set and get methods in the model class and then in all your views, you can access $model objects.  

E.g., in controller... $this-model->set("title", "My Title");

in view...  <html>$model->get("title")</html>

View classes must be the same name as the action method

Example
---

Controllers/HomeController.php has method index()

and corresponding view can be found in Views/Home/index.php

If I added a form to index.php, I would use post_index() action method in HomeController.php and view would still be found
in Views/Home/index.php