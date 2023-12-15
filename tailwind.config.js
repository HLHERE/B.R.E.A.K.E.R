/** @type {import('tailwindcss').Config} */
export default {
    content: [],
    theme: {
        extend: {},
    },
    plugins: [],
};
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {},
    },
    plugins: [require("flowbite/plugin")],
    theme: {
        colors: {
            transparent: "transparent",
            current: "currentColor",
            navbar: "#ED7D31",
            orange_muda: "#FA9B5A",
            coklat: "#6C5F5B",
            coklat_muda: "#887A77",
            abu: "#4F4A45",
            abu_muda:"#6B6663",
            putih: "#F6F1EE",
            for_card:"#D9D4D0",
            hijau: "#219C90",
        },
        fontFamily: {
            Ghetto : ['FunGhetto'] ,
            Arial :['ArialRounded']
        },
    },
};
