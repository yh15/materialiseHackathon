   
function Braille(message) { 
    var brailleArr = []; 
    var myChar, prevCharNum, inQuote 

    function BrailleChar(bPix,bAlt) {
        return ["<IMG HEIGHT=27 WIDTH=19 vspace=5 hspace=1 SRC=\"braillepix-3d/", bPix, ".gif\" ALT=\"", bAlt, "\">"].join("");
    }

    for (var i=0; i<message.length; i++) {
        myChar = message.charAt(i);
        if ((myChar>="a") && (myChar<="z")) {                // a to z
                brailleArr.push(BrailleChar(myChar, myChar));
                prevCharNum = false;            
        } else if((myChar>="A") && (myChar<="Z")) {            // A to Z
                brailleArr.push(BrailleChar("cap", "Caps"));
                brailleArr.push(BrailleChar(myChar, myChar));            
                prevCharNum = false;         
        } else if((myChar>"0") && (myChar<="9")) {
                if (!prevCharNum)
                        brailleArr.push(BrailleChar("num", "Number")); 
                brailleArr.push(BrailleChar(String.fromCharCode(myChar.charCodeAt(0) + 48), myChar)); 
                prevCharNum = true;            
        } else {
            switch (myChar) {
                case " ": 
                    brailleArr.push(BrailleChar("sp", "Space"));
                    prevCharNum = false;
                    break;
                case "0":
                    if (!prevCharNum)
                        brailleArr.push(BrailleChar("num", "Number")); 
                    brailleArr.push(BrailleChar("j", "0"));      
                    prevCharNum = true;
                    break;
                case "\n":
                    brailleArr.push("<br><br>");
                    nbCharsInLine = -1;
                    prevCharNum = false;
                    break;
                case ".":
                    if (prevCharNum)
                        brailleArr.push(BrailleChar("dec", ".")); 
                    else
                        brailleArr.push(BrailleChar("period", "."));  
                    break;
                case "$":
                    brailleArr.push(BrailleChar("period", "$"));
                    prevCharNum = false;
                    break;
                case "%":
                    brailleArr.push(BrailleChar("col", "%"));
                    brailleArr.push(BrailleChar("p", ""));
                    prevCharNum = false;
                    break;
                case "'":
                    brailleArr.push(BrailleChar("qs", "'")); 
                    prevCharNum = false;
                    break;
                case ",":
                    brailleArr.push(BrailleChar("comma", ","));
                    prevCharNum = false;
                    break;
                case "?":
                    brailleArr.push(BrailleChar("qu", "?")); 
                    prevCharNum = false;
                    break;
                case "(":
                case ")":
                    brailleArr.push(BrailleChar("par", "parenthesis")); 
                    prevCharNum = false;
                    break;
                case "*":
                    brailleArr.push(BrailleChar("ast", "*"));
                    brailleArr.push(BrailleChar("ast", "*")); 
                    prevCharNum = false;
                    break;
                case "//":
                    brailleArr.push(BrailleChar("sla", "//")); 
                    prevCharNum = false;
                    break;
                case "!":
                    brailleArr.push(BrailleChar("ex", "!")); 
                    prevCharNum = false;
                    break;
                case "'": 
                    if (inQuote)
                        brailleArr.push(BrailleChar("qc", "Close Quote")); 
                    else
                        brailleArr.push(BrailleChar("qo", "Open Quote"));  
                    inQuote = !inQuote;
                    prevCharNum = false;
                    break;
                case ":":
                    brailleArr.push(BrailleChar("col", ":"));
                    prevCharNum = false;
                    break;
                case ";":
                    brailleArr.push(BrailleChar("sc", ";")); 
                    prevCharNum = false;
                    break;
                case "[":
                    brailleArr.push(BrailleChar("cap", "["));
                    brailleArr.push(BrailleChar("par", ""));
                    break;
                case "]":
                    brailleArr.push(BrailleChar("par", "]"));
                    brailleArr.push(BrailleChar("qs", "")); 
                    break;
            }
        }
    }
    return brailleArr.join("");
}