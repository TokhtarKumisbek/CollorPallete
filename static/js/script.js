const container = document.querySelector(".container");
const refreshBtn = document.querySelector(".refresh-btn");

const maxPaletteBoxes = 32;

const generatePalette = () => {
    container.innerHTML = ""; 
    for (let i = 0; i < maxPaletteBoxes; i++) {
        
        let randomHex = Math.floor(Math.random() * 0xffffff).toString(16);
        randomHex = `#${randomHex.padStart(6, "0")}`;
        
        const color = document.createElement("li");
        color.classList.add("color");
        color.innerHTML = `<div class="rectbox" style="background: ${randomHex}"></div>
                           <span class="hex-value">${randomHex}</span>
                           <button class="copy-btn">Copy</button>`;
        
        const rectbox = color.querySelector('.rectbox');
        
        const colorValueSpan = color.querySelector('.hex-value');

        
         const copyBtn = color.querySelector('.copy-btn');
         copyBtn.addEventListener('click', () => {
             const colorValue = colorValueSpan.textContent;
             navigator.clipboard.writeText(colorValue).then(() => {
                 
                 copyBtn.textContent = 'Copied!';
                 setTimeout(() => {
                     copyBtn.textContent = 'Copy';
                 }, 1000); 
             }).catch(() => {
                 console.error('Failed to copy color value');
             });
         });
         
      
        const colorPickerDiv = document.createElement("div");
        colorPickerDiv.classList.add("color-picker");
        color.appendChild(colorPickerDiv);



        
        const pickr = Pickr.create({
            el: colorPickerDiv,
            theme: 'classic',
            default: randomHex, 
            swatches: [
                'rgba(244, 67, 54, 1)',
                'rgba(233, 30, 99, 0.95)',
                'rgba(156, 39, 176, 0.9)',
                'rgba(103, 58, 183, 0.85)',
                'rgba(63, 81, 181, 0.8)',
                'rgba(33, 150, 243, 0.75)',
                'rgba(3, 169, 244, 0.7)',
                'rgba(0, 188, 212, 0.7)',
                'rgba(0, 150, 136, 0.75)',
                'rgba(76, 175, 80, 0.8)',
                'rgba(139, 195, 74, 0.85)',
                'rgba(205, 220, 57, 0.9)',
                'rgba(255, 235, 59, 0.95)',
                'rgba(255, 193, 7, 1)'
            ],
            components: {
               
                preview: true,
                opacity: true,
                hue: true,
               
                interaction: {
                    hex: true,
                    rgba: true,
                    input: true,
                    clear: true,
                    save: true
                }
            }
        });


        let pickrVisible = false;
        function toggleColorPicker(pickrInstance) {
            if (pickrVisible) {
                pickrInstance.hide();
            } else {
                pickrInstance.show();
            }
            pickrVisible = !pickrVisible;
        }

     
        pickr.on('change', (...args) => {
            let color = args[0].toRGBA();
            rectbox.style.backgroundColor = `rgba(${color[0]}, ${color[1]}, ${color[2]}, ${color[3]})`;
        });


        color.addEventListener('click', () => {
            toggleColorPicker(pickr);
        });

        container.appendChild(color); 
    }
}

generatePalette(); 

refreshBtn.addEventListener("click", generatePalette); 
