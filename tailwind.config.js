/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './resources/css/**/*.css', // pastikan ini ADA
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
// Pastikan Anda telah menginstal Tailwind CSS dan mengonfigurasinya dengan benar.
// Anda dapat menambahkan plugin Tailwind CSS sesuai kebutuhan.