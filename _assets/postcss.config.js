/* eslint-disable quote-props */
/* eslint-disable import/no-extraneous-dependencies */
/* eslint-disable global-require */
module.exports = {
  plugins: {
    'tailwindcss': {},
    'postcss-nested': {},
    'postcss-custom-media': {},
    'postcss-flexbugs-fixes': {},
    'postcss-preset-env': {
      autoprefixer: {
        flexbox: 'no-2009',
      },
      stage: 3,
    },
  },
};
