const Student = require("../models/Student");

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
    store(req, res) {
        const { nama } = req.body;

        const data = {
            message: `Menambahkan data student: ${nama}`,
            data: [],
        };
        res.json(data);
    }
    update(req, res) {
        const { id } = req.params;
        const { nama } = req.body;

        const data = {
            message: `Mengedit student id ${id}, nama ${nama}`,
            data: [],
        };
        res.json(data);
    }
    destroy(req, res) {
        const { id } = req.params;

        const data = {
            message: `Menghapus student id ${id}`,
            data: [],
        };
        res.json(data);
    }
}

const object = new StudentController();

module.exports = object;
