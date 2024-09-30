-- Lista con todos los datos de los empleados del departamento de "Ti"

SELECT e.*
FROM Employees e
JOIN Departments d ON e.department_id = d.id
WHERE d.department_name = 'Ti';


-- Lista de los 3 departamentos con más gastos

SELECT d.department_name, SUM(ex.expenses) AS total_gastos
FROM Departments d
JOIN Expenses ex ON d.id = ex.department_id
GROUP BY d.department_name
ORDER BY total_gastos DESC
LIMIT 3;


-- Lista de los datos de los empleados con mayor salario

SELECT *
FROM Employees
ORDER BY salary DESC
LIMIT 1;


-- Lista de empleados con salarios menores a 1,500,000

SELECT COUNT(*) AS cantidad_empleados
FROM Employees
WHERE salary < 1500000;