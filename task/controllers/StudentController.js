// TODO 3: Import data students dari folder data/students.js
// code here
const student = require("../config/database");
const Student = require("../models/Student");

// Membuat Class StudentController
class StudentController {
    async index(req, res) {
        // memanggil method static all dengan async await.
        const students = await Student.all();

        const data = {
            message: "Menampilkkan semua students",
            data: students,
        };

        res.json(data);
    }

    async store(req, res) {
        /**
         * TODO 2: memanggil method create.
         * Method create mengembalikan data yang baru diinsert.
         * Mengembalikan response dalam bentuk json.
         */
        // code here
        const validateData = {
            nama: req.body.nama,
            nim: req.body.nim,
            email: req.body.email,
            jurusan: req.body.jurusan,
        }
        const students = await Student.create(validateData);

        const data = {
            message: "Menambahkan data student",
            data: validateData,
        };

        res.json(data);
    }

    update(req, res) {
        // TODO 6: Update data students
        // code here
        const { id } = req.params;
        const { nama } = req.body;
        student[id] = nama;

        const data = {
            message: `Mengedit student id ${id}, nama ${nama}`,
            data: student,
        }
        res.json(data);
    }

    destroy(req, res) {
        // TODO 7: Hapus data students
        // code here
        const { id } = req.params;
        student.splice(id, 1);

        const data = {
            message: `Menghapus student id ${id}`,
            data: student,
        }
        res.json(data);
    }
}

// Membuat object StudentController
const object = new StudentController();

// Export object StudentController
module.exports = object;