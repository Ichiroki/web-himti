// ** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["*.{html}", "js/*.{js}"],
	theme: {
		colors: {
			himti: "#071530",
			white: "#FFFFFF",
			"dark-9": "#0f172a",
			gray: "#D9D9D9",
		},
		fontFamily: {
			chivo: ["Chivo Mono", "monospace"],
			poppins: ["Poppins", "sans-serif"],
		},
		extend: {},
	},
	variants: {
		display: ["group-hover"],
	},
	plugins: [],
};
