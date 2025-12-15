const tampilNama = (nama) => {
  return `Halo ${nama}`;
};

console.log(tampilNama("Budi"));

const tampilNamaSingkat = nama => `Halo ${nama}`;
console.log(tampilNamaSingkat("Andi"));

const angka = [-3, -1, 0, 2, 4, 7, -5];

const arrFilter = angka.filter(a => a >= 0);

console.log("Angka awal:", angka);
console.log("Hasil filter (>= 0):", arrFilter);

const kelas = ["A", "B", "C"];

const [senin, rabu, kamis] = kelas;

console.log(`Kelas hari senin itu kelas: ${senin}`);
console.log(`Kelas hari rabu itu kelas: ${rabu}`);
console.log(`Kelas hari kamis itu kelas: ${kamis}`);


const mhs = {
  nama: "Budi",
  umur: 20,
};

const { nama, umur } = mhs;

console.log(`Nama mahasiswa: ${nama}`);
console.log(`Umur mahasiswa: ${umur}`);


const {
  nama: n,
  umur: u
} = mhs;

console.log(`Nama mahasiswa (alias): ${n}`);
console.log(`Umur mahasiswa (alias): ${u}`);