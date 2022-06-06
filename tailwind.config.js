module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./app/Http/Livewire/**/*.php",
        './app/Http/Livewire/**/*Table.php',
        './app/Http/Livewire/PowergridThemes/*.php',
        './vendor/power-components/livewire-powergrid/resources/views/**/*.php',
        './vendor/power-components/livewire-powergrid/src/Themes/Tailwind.php'
    ],
    darkMode: "class",
    theme: {
        extend: {},
    },
    plugins: [],
};
