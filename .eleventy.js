module.exports = eleventyConfig => {
    eleventyConfig.ignores.add("**/jplayer/skin/**/*.html");
    eleventyConfig.addPassthroughCopy("src/assets");
    return {};
} 
