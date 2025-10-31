# Tailwind CSS WordPress Theme Starter

A modern WordPress theme starter template built with Tailwind CSS v4, featuring a clean development workflow and optimized build process.

## Features

- 🎨 **Tailwind CSS v4** - Latest version with PostCSS integration
- ⚡ **Hot Reload** - Automatic CSS compilation and file watching
- 🏗️ **Modern Build Process** - PostCSS with optimized output
- 📱 **Responsive Ready** - Mobile-first approach with Tailwind utilities
- 🎯 **WordPress Optimized** - Proper enqueue system and theme structure
- 🚀 **Developer Friendly** - Clean file structure and development tools

## Quick Start

### Prerequisites

- Node.js (v16 or higher)
- npm or yarn
- WordPress installation

### Installation

1. **Clone or download this theme** to your WordPress themes directory:
   ```bash
   wp-content/themes/your-theme-name/
   ```

2. **Install dependencies**:
   ```bash
   npm install
   ```

3. **Start development**:
   ```bash
   npm run dev
   ```

4. **Activate the theme** in your WordPress admin panel

## Development Workflow

### Available Scripts

- `npm run dev` - Start development server with file watching
- `npm run build` - Build CSS for production

### File Structure

```
your-theme/
├── css/
│   ├── input.css      # Your Tailwind CSS source file
│   └── output.css     # Compiled CSS (auto-generated)
├── js/
│   └── navigation.js  # Theme JavaScript
├── inc/               # Theme includes
├── template-parts/    # Template parts
├── functions.php      # Theme functions
├── package.json       # Node.js dependencies
├── postcss.config.mjs # PostCSS configuration
└── .gitignore         # Git ignore rules
```

### CSS Development

1. **Edit your styles** in `css/input.css`:
   ```css
   @import "tailwindcss";
   
   /* Your custom styles here */
   .my-custom-class {
     @apply bg-blue-500 text-white p-4;
   }
   ```

2. **The CSS automatically compiles** to `css/output.css` when you save

3. **WordPress loads the compiled CSS** through the enqueue system

## Customization

### Adding Custom Styles

Add your custom CSS classes in `css/input.css` using Tailwind's `@apply` directive:

```css
@import "tailwindcss";

.btn-primary {
  @apply bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded;
}

.card {
  @apply bg-white shadow-lg rounded-lg p-6;
}
```

### Theme Configuration

- **Theme name**: Edit the theme header in `style.css`
- **Functions**: Modify `functions.php` for theme functionality
- **Templates**: Customize PHP template files as needed

## Build Process

The theme uses PostCSS with Tailwind CSS v4 for processing:

- **Input**: `css/input.css` (your source file)
- **Output**: `css/output.css` (compiled CSS)
- **Watch**: Automatic recompilation on file changes
- **Optimization**: Minified and optimized for production

## WordPress Integration

The theme properly integrates with WordPress:

- ✅ **Enqueue System** - CSS and JS files properly loaded
- ✅ **Theme Support** - Post thumbnails, menus, custom logo
- ✅ **Widget Areas** - Sidebar registration
- ✅ **HTML5 Support** - Modern markup
- ✅ **Translation Ready** - Text domain setup

## Browser Support

- Modern browsers (Chrome, Firefox, Safari, Edge)
- IE11+ (with Tailwind CSS compatibility)

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the GPL-2.0-or-later License - see the [LICENSE](LICENSE) file for details.

## Support

For support and questions:
- Create an issue on GitHub
- Check the [Tailwind CSS documentation](https://tailwindcss.com/docs)
- Review [WordPress theme development](https://developer.wordpress.org/themes/)

---

**Happy coding!** 🚀
