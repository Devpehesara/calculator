# PHP Calculator Project

This project is a simple web-based calculator application built using PHP. It allows users to perform basic arithmetic operations like addition, subtraction, multiplication, and division.

## Table of Contents
- [Features](#features)
- [Getting Started](#getting-started)
- [Usage](#usage)
- [Customization](#customization)
- [Contributing](#contributing)
- [License](#license)

## Features
- Simple and clean user interface
- Supports basic arithmetic operations
- Responsive design using CSS

## Getting Started

To get a local copy up and running follow these simple steps.

### Prerequisites

You will need a web server with PHP support. XAMPP or WAMP are good options for local development.

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/your_username/php-calculator.git
   ```
2. Move the project to your web server's root directory.

3. Open your web browser and navigate to
   ```
   http://localhost/php-calculator
   ```

## Usage

### HTML Structure

The main calculator interface is created using HTML. Below is the structure:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
   <table class="center">
    <tr>
        <td>
        <form action="logic.php" method="post">
            <table>
                <tr>
                    <td>
                    <h1>CALCULATOR</h1>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                    <h3>First Number</h3>
                    <input type="number" name="Num01">
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                    <h3>Second Number</h3>
                    <input type="number" name="Num02">
                    </td>
                </tr>
            </table>
            <br>
            <input type="submit" name="Addition" value="+">
            <input type="submit" name="Subtract" value="-">
            <input type="submit" name="Multiply" value="*">
            <input type="submit" name="Devide" value="/">
        </form>
        </td>
    </tr>
   </table>
</body>
</html>
```

### PHP Logic

The logic for the calculator is handled in the `logic.php` file:

```php
<?php
    $num_1 = $_POST['Num01'];
    $num_2 = $_POST['Num02'];
    $result = '';

    if (isset($_POST["Addition"])) {
        $result = $num_1 + $num_2;
    }
    if (isset($_POST["Subtract"])) {
        $result = $num_1 - $num_2;
    }
    if (isset($_POST["Multiply"])) {
        $result = $num_1 * $num_2;
    }
    if (isset($_POST["Devide"])) {
        $result = $num_1 / $num_2;
    }

    echo $result;
?>
```

### CSS Styling

The appearance of the calculator is defined in the `style.css` file:

```css
.center {
    margin: auto;
    border: 3px rgb(233, 230, 230);
    padding: 10px;
    background-color: black;
}

h1 {
    color: white;
    font-family: Arial, Helvetica, sans-serif;
}

h3 {
    color: white;
    font-family: Arial, Helvetica, sans-serif;
}

input[type=number] {
    width: 100%;
    padding: 10px 30px;
    margin: 8px 0;
    box-sizing: border-box;
    background-color: rgb(245, 189, 158);
    color: black;
}

input[type=submit] {
    background-color: orangered;
    padding: 10px 20px;
    margin: 4px 2px;
    cursor: pointer;
    font-size: 20px;
    color: white;
}
```

## Customization

- Update the `style.css` file to change the appearance of the calculator.
- Modify the `logic.php` file to add more complex operations if needed.
- Adjust the HTML structure to add more input fields or change the layout.

## Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

Distributed under the MIT License. See `LICENSE` for more information.

