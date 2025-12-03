<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legal-Status | SpaceECE India Foundation</title>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        background: #fff;
        color: #333;
        line-height: 1.6;
    }

    /* Title Section */
    .Title {
        background: #ff9e00;
        padding: 120px 8% 100px;
        text-align: center;
        color: white;
    }

    .Title h1 {
        font-size: 60px;
        font-weight: 700;
    }

    .Title::after {
        content: "";
        width: 160px;
        height: 6px;
        background: white;
        display: block;
        margin: 18px auto 0;
        border-radius: 10px;
    }

    /* Blocks */
    .block-section {
        padding: 60px 6%;
        background: linear-gradient(to bottom, #f6faf9, #e9f4f1);
    }

    .block-section .content {
        border-left: 6px solid #2F6F63;
        padding: 20px 25px;
        margin-bottom: 30px;
    }

    .block-section h3 {
        font-size: 28px;
        font-weight: 700;
        color: #2F6F63;
    }

    .block-section p {
        font-size: 17px;
        margin-top: 8px;
        line-height: 1.7;
    }

    /* Table */
    .legal-status table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid #dfe8e6;
    }

    .legal-status th {
        background: #2F6F63;
        color: #fff;
        padding: 15px;
        font-size: 17px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .legal-status td {
        padding: 16px;
        font-size: 15.5px;
        border-bottom: 1px solid #eef2f1;
    }

    .legal-status tr:nth-child(even) {
        background: #f5faf9;
    }

    .legal-status tr:hover {
        background: #e1f0ec;
        transition: 0.3s;
    }

    /* ========= Responsive Design ========== */

    /* Tablets */
    @media (max-width: 992px) {
        .Title h1 {
            font-size: 48px;
        }

        .block-section h3 {
            font-size: 24px;
        }

        .block-section p {
            font-size: 16px;
        }
    }

    /* Mobile */
    @media (max-width: 768px) {
        .Title {
            padding: 80px 5% 60px;
        }

        .Title h1 {
            font-size: 38px;
        }

        .Title::after {
            width: 120px;
            height: 5px;
        }

        .block-section {
            padding: 40px 4%;
        }

        .block-section .content {
            padding: 18px;
        }

        .legal-status th,
        .legal-status td {
            padding: 12px;
            font-size: 14px;
        }
    }

    /* Very small screens */
    @media (max-width: 480px) {
        .Title h1 {
            font-size: 30px;
        }

        table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }
    }

    </style>
</head>
<body>

<!-- Title -->
<div class="Title">
    <h1>Legal Status</h1>
</div>

<!-- CONTENT -->
<section class="block-section">
    <div class="content">
        <h3>The Legal Status of SpacECE</h3>
        <p>SpacECE is a non-profit organisation, registered as SpacECE India Foundation, under section 8 of the Companies Act 2013.</p>
    </div>

    <!-- Legal Status Table -->
    <div class="legal-status">
        <table>
            <tr>
                <th>Sr.No</th>
                <th>Compliance</th>
                <th>Details</th>
                <th>Registration No.</th>
            </tr>

            <tr>
                <td>1</td>
                <td>MOA & AOA Certificate</td>
                <td>SpacECE India Foundation is registered for undertaking a Memorandum of Association (MOA) and Articles of Association (AOA).</td>
                <td>U85300PN2021NPL200141</td>
            </tr>

            <tr>
                <td>2</td>
                <td>PAN</td>
                <td>A permanent account number is a ten-character alphanumeric identifier issued by the Income Tax Department.</td>
                <td>ABFCS8657L</td>
            </tr>

            <tr>
                <td>3</td>
                <td>TAN</td>
                <td>TAN is required for those responsible for deducting or collecting tax at source.</td>
                <td>PAES72735F</td>
            </tr>

            <tr>
                <td>4</td>
                <td>12A Certificate</td>
                <td>Granted by the Income Tax Department for exemption from income tax payment.</td>
                <td>ABFCS8657LE20221</td>
            </tr>

            <tr>
                <td>5</td>
                <td>80G Certificate</td>
                <td>Allows donors to avail tax deductions on donations.</td>
                <td>ABFCS8657LF20221</td>
            </tr>

            <tr>
                <td>6</td>
                <td>GuideStar Certificate</td>
                <td>Issued to NGOs that comply with standards of transparency and accountability.</td>
                <td>13915</td>
            </tr>

            <tr>
                <td>7</td>
                <td>NGO Darpan Certificate</td>
                <td>Recognized by the government on NGO Darpan portal.</td>
                <td></td>
            </tr>

            <tr>
                <td>8</td>
                <td>Board of Directors</td>
                <td>Ms Aparna Chaudhari and Mr Sachin Mohite are the board members.</td>
                <td>Available on request</td>
            </tr>

            <tr>
                <td>9</td>
                <td>CSR 1 Certificate</td>
                <td>Registration for CSR activities will be completed soon.</td>
                <td>In Progress</td>
            </tr>
        </table>
    </div>
</section>

</body>
</html>
