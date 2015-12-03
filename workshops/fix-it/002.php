<?php

function doStuff($s) {
    return ".";
}

// Dont change below here
// =============================================
assert(doStuff(1) == ".\n.", "Nope! Should be \".\n.\"");
echo "=========================================";
assert(doStuff(3) == "...\n.\n.\n.", "Nope! Should be \"...\n.\n.\n.\"");
echo "=========================================";
assert(doStuff(5) == ".....\n.\n.\n.\n.\n.", "Nope! Should be \"...\n.\n.\n.\n.\n.\"");
// =============================================
?>
