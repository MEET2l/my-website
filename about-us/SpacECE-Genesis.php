<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpacECE Genesis | SpaceECE India Foundation</title>

    <style>
    /* Global */
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

    /* Content Wrapper */
    .content-section {
        padding: 80px 10%;
    }

    /* Main Block */
    .main-block {
        width: 90%;
        margin: 50px auto;
        background: #fabffe;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 6px 25px rgba(0,0,0,0.12);
    }

    .main-image img {
        width: 100%;
        border-radius: 20px;
        object-fit: cover;
    }

    /* Block Styling */
    .block {
        padding: 25px;
        border-radius: 18px;
        margin-bottom: 25px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.08);
        font-size: 17px;
    }

    .block h3 {
        font-size: 22px;
        margin-bottom: 10px;
        font-weight: 600;
    }

    /* Background Colors */
    .block1 { background: #FFF3E0; }
    .block2 { background: #E3F2FD; }
    .block3 { background: #E8F5E9; }
    .block4 { background: #F3E5F5; }
    .block5 { background: #FFF8E1; }
    .block6 { background: #FBE9E7; }

    /* ================= Responsive Design ================= */

    /* Tablets */
    @media (max-width: 992px) {
        .Title h1 { font-size: 48px; }

        .content-section {
            padding: 60px 6%;
        }

        .block {
            padding: 22px;
            font-size: 16px;
        }
    }

    /* Mobile Devices */
    @media (max-width: 768px) {
        .Title {
            padding: 90px 5% 60px;
        }

        .Title h1 {
            font-size: 36px;
        }

        .Title::after {
            width: 120px;
            height: 5px;
        }

        .content-section {
            padding: 40px 4%;
        }

        .main-block {
            width: 100%;
            padding: 20px;
        }

        .block {
            padding: 20px;
        }

        .block h3 {
            font-size: 20px;
        }
    }

    /* Very Small Screens */
    @media (max-width: 480px) {
        .Title h1 {
            font-size: 30px;
        }

        .block h3 {
            font-size: 19px;
        }

        .block {
            padding: 18px;
            font-size: 15px;
        }
    }
    </style>
</head>

<body>

<!-- Title -->
<div class="Title">
    <h1>SpacECE Genesis</h1>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="content">

        <!-- Main Image Block -->
        <div class="main-block">
            <div class="main-image">
                <img src="../about-us/image/SpacECE Genesis.png" alt="">
            </div>
        </div>

        <!-- BLOCK 1 -->
        <div class="block block1">
            <h3 style="color:#94b1fc">Identifying the Need</h3>
            <p>The genesis of SpacECE India Foundation can be traced back to the recognition of a critical need in the education sector while working in the urban slums through Samidha. We witnessed the disparities faced by children from underprivileged locations where access to quality education was limited.</p>
        </div>

        <!-- BLOCK 2 -->
        <div class="block block2">
            <h3 style="color:#ff9e00">Founding Principles</h3>
            <p>Built on the foundation of equity, inclusion, and empowerment, SpacECE India Foundation was established with the core belief that every child deserves equal access to quality education and holistic development.</p>
        </div>

        <!-- BLOCK 3 -->
        <div class="block block3">
            <h3 style="color:#94b1fc">Collaborative Approach</h3>
            <p>We have embraced a collaborative approach, forging partnerships with like-minded individuals and organizations. Together, we pool our knowledge and resources for sustainable and scalable impact.</p>
        </div>

        <!-- BLOCK 4 -->
        <div class="block block4">
            <h3 style="color:#ff9e00">Holistic Development Focus</h3>
            <p>We emphasize holistic development—physical, cognitive, social, and emotional—ensuring children grow into confident, compassionate, and resilient individuals.</p>
        </div>

        <!-- BLOCK 5 -->
        <div class="block block5">
            <h3 style="color:#94b1fc">Innovation and Adaptation</h3>
            <p>We foster a culture of innovation, embracing technology, research, and evidence-based practices to design sustainable and impactful educational solutions.</p>
        </div>

        <!-- BLOCK 6 -->
        <div class="block block6">
            <h3 style="color:#ff9e00">Growth and Impact</h3>
            <p>Since our inception, we have expanded our reach across underprivileged communities. Countless success stories motivate us to continue creating lasting educational impact.</p>
        </div>

    </div>
</section>

</body>
</html>
