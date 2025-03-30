module.exports = {
    mode: "development", // or "production"
    entry: "./assets/js/react-app.js", // Ensure this path exists
    output: {
      path: __dirname + "/dist",
      filename: "bundle.js",
    },
    module: {
      rules: [
        {
          test: /\.jsx?$/,
          exclude: /node_modules/,
          use: {
            loader: "babel-loader",
          },
        },
      ],
    },
    resolve: {
      extensions: [".js", ".jsx"],
    },
  };
  