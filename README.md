DrawEllipse. PHP Tutorials. 2D Graphics. GD. Web Application. 
This web application (site) consists of an HTML page with a file named "index.html" and a PHP script with a file named "DrawEllipse.php." 
The web page with the file named "Index.html" is the start page of the web application (site). 
It is a web form for submitting data to the PHP script with the file named "DrawEllipse.php" using the "POST" method.
Consists of the following elements:
  1. A label with the name "label1" and the value "Width:".
  2. A numeric input field named "EllipseWidth".
  3. A label with the name "label2" and the value "Height:".
  4. A numeric input field named "EllipseHeight".
  5. A "submit data" button with the name "Submit" and the value "Submit".
  6. The "reset data" button with the name "Reset" and the value "Reset".
A PHP script with a file named "DrawEllipse.php" does the following:
  1. Reads web form data. Data is read from numeric fields named "EllipseWidth" and "EllipseHeight."
  2. Creates variables to store the dimensions of the ellipse displayed on the screen.
  3. Creates an image with dimensions given by the values ​​of the corresponding variables.
  4. Cleanses it with black light.
  5. Creates variables for the red outline and yellow color of the ellipse.
  6. Sets the ellipse outline thickness to 30 pixels.
  7. Draws an ellipse with the previously specified parameters on a black background.
  8. Sets the data format for output to the web page as a png image.
  9. Outputs data to a browser web page.
  10. Frees resources and terminates.

DrawEllipse. Занятия по PHP. 2D Графика. Библиотека GD. Веб Приложение.
Данное веб приложение (сайт) состоит из HTML страницы с файлом по имени "index.html" и скрипта на языке программирования PHP с файлом по имени "DrawEllipse.php".
Веб страница с файлом по имени "Index.html" является стартовой страницей веб приложения (сайта). 
Представляет собой веб форму для передачи данных в скрипт на языке программирования PHP с файлом по имени "DrawEllipse.php" методом "POST".
Состоит из следующих элементов:
  1. Надпись с именем "label1" и значением "Width:".
  2. Числовое поле ввода данных с именем "EllipseWidth".
  3. Надпись с именем "label2" и значением "Height:".
  4. Числовое поле ввода данных с именем "EllipseHeight".
  5. Кнопка "отправка данных" с именем "Submit" и значением "Submit".
  6. Кнопка "сброс данных" с именем "Reset" и значением "Reset".
Скрипт на языке программирования PHP с файлом по имени "DrawEllipse.php" делает следущее:
  1. Читает данные веб формы. Данные считываются из числовых полей с именами "EllipseWidth" и "EllipseHeight".
  2. Создаёт переменные для сохранения размеров выводимого на экран эллипса.
  3. Создаёт картинку с размерами со значениями соответствующих переменных.
  4. Очищает её чёрным светом.
  5. Создаёт переменные для красного контура и жёлтого цвета эллипса.
  6. Устанавливает толщину контура эллипса в 30 пикселей.
  7. Рисует эллипс с заданными ранее параметрами на чёрнрм фоне.
  8. Устанвливает формат данных для вывода на веб страницу как картинка png.
  9. Выводит данные на веб страницу браузера.
  10. Освобождает ресурсы и завершает работу.
