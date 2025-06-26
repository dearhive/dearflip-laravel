# DearFlip PDF Flipbook for Laravel

A Laravel implementation of DearFlip PDF Flipbook viewer.

## Introduction

DearFlip is a powerful PDF Flipbook solution that offers a realistic book-like experience for viewing PDF documents on the web. This repository demonstrates how to integrate DearFlip with a Laravel application.

## Requirements

- PHP 8.1+
- Laravel x.x
- jQuery (included with DearFlip)

## Installation

### Option 1: Clone this Repository (Quick Start)

If you want to quickly test the DearFlip implementation:

```bash
# Clone the repository
git clone https://github.com/dearhive/dearflip-laravel.git
cd dearflip-laravel

# Install dependencies
composer install
npm install

# Create environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run database migrations
php artisan migrate

# Start the development server
php artisan serve
```

### Option 2: Manual Setup

### 1. Download DearFlip

Purchase and download DearFlip from [official website](https://dearflip.com/).

### 2. Extract DearFlip Files

Extract the DearFlip package and copy the following directories to your Laravel public folder:

```bash
cp -r dflip/ /path/to/your/laravel/public/
```

Your directory structure should look like:

```
public/
├── dflip/
│   ├── css/
│   ├── js/
│   ├── sound/
│   └── images/
```

### 3. Add PDF Files

Place your PDF files in the public directory:

```bash
public/
├── pdf/
│   └── your-document.pdf
```

## Basic Usage

### 1. Include DearFlip Assets
[Reference](https://js.dearflip.com/docs/basic-usages/)
In your Blade template (e.g., welcome.blade.php), include the required CSS and JavaScript files:

```html
<!-- DearFlip assets -->
<link rel="stylesheet" href="/dflip/css/dflip.min.css">
<script src="/dflip/js/libs/jquery.min.js"></script>
<script src="/dflip/js/dflip.js"></script>
```

### 2. Add the DearFlip Element
[Reference](https://js.dearflip.com/docs/basic-usages/)

Add a container element where the PDF flipbook will be rendered:

```html
<div data-option="dflipOptions" class="_df_book"></div>
```

### 3. Configure DearFlip Options
[Reference](https://js.dearflip.com/docs/basic-usages/)

Set the DearFlip configuration in your controller and pass it to the view:

```php
// In your route or controller
Route::get('/', function () {
    return view('welcome');
});
```

In your Blade template, initialize DearFlip with these options:

```html
<script>
    window.dflipOptions = {
        'source': '/pdf/the-three-musketeers.pdf'
    }
</script>
```

### 

## Advanced Configuration

DearFlip offers many [customization options](https://js.dearflip.com/docs/options-list/). Here are some commonly used ones:

## Multiple PDF Viewers

To have multiple PDF viewers on a single page:

```html
<div id="pdf1" class="df-element"></div>
<div id="pdf2" class="df-element"></div>

<script>
    $('#pdf1').flipBook('/pdf/document1.pdf', {
        height: 600,
        backgroundColor: "#FFC0CB"
    });
    
    $('#pdf2').flipBook('/pdf/document2.pdf', {
        height: 600,
        backgroundColor: "#ADD8E6"
    });
</script>
```

## Troubleshooting

### PDF Not Loading

1. Check if the PDF path is correct
2. Ensure the PDF file is accessible (proper permissions)
3. Verify that all DearFlip assets are correctly loaded

### JavaScript Console Errors

Check the browser's console for any JavaScript errors, which may indicate:
- Missing DearFlip files
- jQuery conflicts
- PDF loading issues

## Additional Resources

- Official Documentation: [http://js.dearflip.com/docs](http://js.dearflip.com/docs)
- Support: [https://dearflip.com/support](https://dearflip.com/support)

## License

DearFlip requires a license purchase from [https://dearflip.com](https://dearflip.com).

This Laravel implementation example is for demonstration purposes.
