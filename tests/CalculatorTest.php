<?php
// Impor library yang diinstall pada vendor
require __DIR__ . '/../vendor/autoload.php';
// Impor source code yang menjadi bahan uji
require __DIR__ . '/../src/Calculator.php';

// Kelompokkan pengujian
describe('test calculator operations', function () {
    // Uji penjumlahan 2 angka
    test('addition of two numbers', function () {
        // Buat instance dari class Calculator
        $calculator = new Calculator();
        // Ekspektasi: hasil penjumlahan berhasil terhitung beserta tipe datanya 
        expect($calculator->add(2, 3))
            ->toBe(5)
            ->toBeInt();
    });

    // Uji pembagian dengan nol
    test('divide a number by zero', function () {
        // Buat instance dari class Calculator
        $calculator = new Calculator();
        // Ekspektasi: mengecek pesan error yang muncul ketika membagi dengan nol
        expect(fn() => $calculator->divide(10, 0))
            ->toThrow(InvalidArgumentException::class, "Division by zero is not allowed.");
    });
});
