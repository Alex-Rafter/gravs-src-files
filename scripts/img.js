const sharp = require("sharp");
const shell = require("shelljs");
const pathToImages = '../img/icons/fa-thin'
const listOfImages = shell.ls(pathToImages);
shell.mkdir(`${pathToImages}/png-version`);

listOfImages.forEach((image) => {
  sharp(`${pathToImages}/${image}`)
    .resize(61, 60, {
      fit: sharp.fit.inside,
    })
    .sharpen()
    .toFile(`${pathToImages}/png-version/${image.replace(".svg", ".png")}`)
    .then((info) => {
      console.log("done");
    })
    .catch((err) => {
      console.log(err);
    });
});
