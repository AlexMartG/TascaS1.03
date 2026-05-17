# 🐘 Task S1.03. PHP Arrays — Level 1

Practice of array creation and manipulation in PHP.

---

## 📄 Description

This project focuses on working with arrays in PHP. The exercises cover indexed arrays, associative arrays, element removal, index reordering and custom functions that operate on arrays.

---

## 🎯 Learning objectives

- Create and use indexed and associative arrays
- Operate with and between arrays
- Manipulate array elements: add, remove and reindex
- Build functions that receive arrays as parameters

---

## 🛠 Technologies

- **PHP 8+**

---

## 📁 Project structure

```
├── exercise1.php
├── exercise2.php
├── exercise3.php
├── exercise4.php
└── README.md
```

---

## 📝 Exercises summary

| Exercise | Description |
|----------|-------------|
| **Exercise 1** | Create an array with 5 integers and print them one by one |
| **Exercise 2** | Work with a 6-element indexed array: print its size, remove an element, reindex keys and display the final result |
| **Exercise 3** | Function that receives an array of words and a character, returns `true` if all words contain that character |
| **Exercise 4** | Associative array representing personal information: name, age, email and favourite food |

---

## 🚀 How to run the project

1. Clone the repository:
   ```bash
   git clone https://github.com/AlexMartG/TascaS1.03.git
   ```

2. Make sure you have PHP installed:
   ```bash
   php --version
   ```

3. Run any exercise from the terminal:
   ```bash
   php exercise1.php
   ```

---

## ⚠️ Challenges faced

- Ensuring array indexes are properly reordered after removing an element (Exercise 2), using `array_values()` to avoid index gaps.
- Handling case sensitivity correctly in the character search function (Exercise 3).


---

## ✅ Best practices applied

- Each exercise isolated in its own file
- Functions used to keep code reusable and clean
- Edge cases considered, such as empty arrays or missing characters
