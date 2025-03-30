# React WordPress Theme Framework

A modern WordPress theme framework built with React and Webpack. This framework enables you to seamlessly integrate React components into a WordPress theme.

## 🚀 Features
- Fully functional React integration in a WordPress theme.
- Uses Webpack for bundling React components.
- Supports dynamic rendering inside WordPress templates.
- Easy to extend with custom React components.

## 📂 Folder Structure
```
📂 react-wordpress-framework
├── 📂 assets
│   └── 📂 js
│       ├── gutenberg-block.js
│       ├── react-app.js
│       └── shortcode.js
├── 📂 includes
│   ├── enqueue-scripts.php
│   ├── register-blocks.php
│   └── register-shortcodes.php
├── .babelrc
├── functions.php
├── index.php
├── package-lock.json
├── package.json
├── react-wordpress-framework.php
├── style.css
└── webpack.config.js

```

## 🛠 Installation & Setup
### 1. Clone the Repository
```sh
git clone https://github.com/sayandebnath-creator/react-wordpress-framework.git
```

### 2. Install Dependencies
Navigate to the theme folder and install dependencies:
```sh
cd react-wordpress-framework
npm install
```

### 3. Build the React App
To compile and bundle your React components, run:
```sh
npx webpack
```
This will generate the `dist/bundle.js` file, which is included in the theme.

### 4. Activate the Theme in WordPress
1. Zip the theme folder (`react-wordpress-framework`).
2. Upload it via the WordPress dashboard (`Appearance > Themes > Add New > Upload Theme`).
3. Activate the theme.

## 🏗 Usage
- Place the following code in `index.php` where you want React to mount:
  ```php
  <div id="react-root"></div>
  ```
- Ensure React is enqueued in `functions.php`:
  ```php
  function enqueue_react_scripts() {
      wp_enqueue_script('react-bundle', get_template_directory_uri() . '/dist/bundle.js', [], '1.0', true);
  }
  add_action('wp_enqueue_scripts', 'enqueue_react_scripts');
  ```

## 🔧 Troubleshooting
- If changes are not reflecting, re-run:
  ```sh
  npx webpack
  ```
- If `ReactDOM.render` throws an error, update imports in `react-app.js`:
  ```js
  import { createRoot } from 'react-dom/client';
  ```
  And modify rendering:
  ```js
  const root = document.getElementById("react-root");
  if (root) {
      createRoot(root).render(<App />);
  }
  ```

## 📜 License
This project is licensed under the MIT License.

## 💡 Contributing
Pull requests are welcome! For major changes, please open an issue first.

---
Made with ❤️ by Sayan Debnath

