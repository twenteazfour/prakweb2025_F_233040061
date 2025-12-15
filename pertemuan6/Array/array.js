function tambahPenumpang(namaPenumpang, penumpang) {
    // jika angkot kosong
    if (penumpang.length === 0) {
        penumpang.push(namaPenumpang);
        return penumpang;
    }
}

    // telusuri kursi
    for (let i = 0; i < penumpang.length; i++) {
        // jika ada kursi kosong
        if (penumpang[i] === undefined) {
            penumpang[i] = namaPenumpang;
            return penumpang;
        }
        // jika sudah ada nama yang sama
        else if (penumpang[i] === namaPenumpang) {
            console.log(namaPenumpang + " sudah ada di dalam angkot.");
            return penumpang;
        }
    }

    // jika seluruh kursi terisi
    penumpang.push(namaPenumpang);
    return penumpang;

let penumpang = [];

penumpang = tambahPenumpang("Hinata", penumpang);
penumpang = tambahPenumpang("Tobio", penumpang);
penumpang = tambahPenumpang("Akaashi", penumpang);
penumpang = tambahPenumpang("Hinata", penumpang);
console.log(penumpang);