// TODO 3: Import data students dari folder data/students.js
// code here
const student = require("../data/students");

// Membuat Class StudentController
class StudentController {
    index(req, res) {
        // TODO 4: Tampilkan data students
        // code here
        const data = {
            message: "Menampilkan semua student",
            data: student,
        }
        res.json(data);
    }

    store(req, res) {
        // TODO 5: Tambahkan data students
        // code here
        const { nama } = req.body;
        student.push(nama);

        const data = {
            message: `Menambahkan data student: ${nama}`,
            data: student,
        }
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