---
layout: research
title: T-MDML
slug: t-mdml
category: t-mdml
type: paper
date: 2024-12-10
permalink: /research/t-mdml/
thumbnail: /~gangman/assets/images/research/t-mdml/t-mdml.png
description: Triplet-based Multiple Distance Metric Learning for Multi-Instance Multi-Label Classification with Label Correlation
author: Dongyeon Kim,Yejin Kan,Gangman Yi
---

![T_MDML](/~gangman/assets/images/research/t-mdml/t-mdml.png)

### T-MDML: Triplet-based Multiple Distance Metric Learning for Multi-Instance Multi-Label Classification with Label Correlation

The multi-instance multi-label (MIML) problem is a new supervised learning paradigm that has emerged to efficiently represent complex data. Therefore, various similarity-based algorithms have been proposed, but existing algorithms commonly measure similarity by considering only the structural relationships in the feature space without utilizing information from the label space. As these approaches do not adequately reflect the complex properties of MIML data, it is essential to improve the accuracy of MIML classification by utilizing information from both feature and label spaces. Thus,
we propose a new algorithm, T-MDML: triplet-based multiple distance metric learning for MIML. T-MDML defines a distance metric by learning a global property shared by the entire label space and a label-specific property for each label. In addition, we simultaneously consider the structural characteristics of features and label space to extract label correlation and incorporate it into the optimization process. In experiments, we demonstrate the efficiency of our label correlation estimation method and verify its performance by applying it to MIMLkNN. We also demonstrate T-MDML’s relative superiority over existing MIML algorithms, as well as its scalability when applied to similarity-based MIML methods.
