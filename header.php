<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>With Style</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <?php wp_head();?>
  </head>
  <body>
    <div>
        <header>
        <nav>
            <h1 id="logo">LOGO</h1>
            <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            </ul>
            <div class="clear"></div>
        </nav>
        </header>

        <section class="hero-section">
        <h2>THE COOKING MASTER</h2>
        <h3>Buy our homemade COOKING</h3>
        <button>Buy Now!</button>
        </section>

        <section class="form-section">
        <header>
            <h2>Contact Us</h2>
        </header>
        <form>
            <label for="name">Name:</label>
            <input type="text" required />
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required />
            <label for="message">Message:</label>
            <textarea
            name="message"
            id="message"
            cols="30"
            rows="10"
            required
            ></textarea>
            <button>Submit</button>
        </form>
        </section>