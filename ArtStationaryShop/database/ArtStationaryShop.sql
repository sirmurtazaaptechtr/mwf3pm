CREATE DATABASE ArtStationaryShop;
USE ArtStationaryShop;

-- Admin Table
CREATE TABLE Admin (
    AdminID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100),
    Email VARCHAR(100) UNIQUE,
    Password VARCHAR(255)
);

-- Employee Table
CREATE TABLE Employee (
    EmpID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100),
    Email VARCHAR(100) UNIQUE,
    Password VARCHAR(255),
    Role VARCHAR(50),
    AdminID INT,
    FOREIGN KEY (AdminID) REFERENCES Admin(AdminID) ON DELETE CASCADE
);

-- Customer Table
CREATE TABLE Customer (
    CustomerID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100),
    Email VARCHAR(100) UNIQUE,
    Password VARCHAR(255),
    Address TEXT,
    Contact VARCHAR(15)
);

-- Product Table
CREATE TABLE Product (
    ProductID CHAR(7) PRIMARY KEY, 
    ProductName VARCHAR(255),
    Description TEXT,
    Price DECIMAL(10,2),
    Stock INT,
    Warranty VARCHAR(50)
);

-- Order Table
CREATE TABLE Orders (
    OrderID CHAR(16) PRIMARY KEY,
    CustomerID INT,
    OrderDate DATETIME DEFAULT CURRENT_TIMESTAMP,
    TotalAmount DECIMAL(10,2),
    PaymentStatus ENUM('Pending', 'Completed', 'Failed'),
    DeliveryType ENUM('1', '2', '3'),
    OrderStatus ENUM('Pending', 'Processing', 'Shipped', 'Delivered', 'Cancelled'),
    FOREIGN KEY (CustomerID) REFERENCES Customer(CustomerID) ON DELETE CASCADE
);

-- OrderItem Table
CREATE TABLE OrderItem (
    OrderItemID INT AUTO_INCREMENT PRIMARY KEY,
    OrderID CHAR(16),
    ProductID CHAR(7),
    Quantity INT,
    Subtotal DECIMAL(10,2),
    FOREIGN KEY (OrderID) REFERENCES Orders(OrderID) ON DELETE CASCADE,
    FOREIGN KEY (ProductID) REFERENCES Product(ProductID) ON DELETE CASCADE
);

-- Payment Table
CREATE TABLE Payment (
    PaymentID INT AUTO_INCREMENT PRIMARY KEY,
    OrderID CHAR(16),
    PaymentType ENUM('Credit Card', 'Cheque', 'VPP', 'DD'),
    PaymentStatus ENUM('Pending', 'Cleared', 'Failed'),
    TransactionID VARCHAR(50) UNIQUE,
    FOREIGN KEY (OrderID) REFERENCES Orders(OrderID) ON DELETE CASCADE
);

-- Delivery Table
CREATE TABLE Delivery (
    DeliveryID INT AUTO_INCREMENT PRIMARY KEY,
    OrderID CHAR(16),
    DispatchDate DATETIME DEFAULT CURRENT_TIMESTAMP,
    DeliveryStatus ENUM('Pending', 'In Transit', 'Delivered'),
    TrackingNumber VARCHAR(50) UNIQUE,
    FOREIGN KEY (OrderID) REFERENCES Orders(OrderID) ON DELETE CASCADE
);

-- Feedback Table
CREATE TABLE Feedback (
    FeedbackID INT AUTO_INCREMENT PRIMARY KEY,
    CustomerID INT,
    FeedbackText TEXT,
    Rating INT CHECK (Rating BETWEEN 1 AND 5),
    FOREIGN KEY (CustomerID) REFERENCES Customer(CustomerID) ON DELETE CASCADE
);

-- Stock Table
CREATE TABLE Stock (
    StockID INT AUTO_INCREMENT PRIMARY KEY,
    ProductID CHAR(7),
    QuantityAvailable INT,
    FOREIGN KEY (ProductID) REFERENCES Product(ProductID) ON DELETE CASCADE
);
