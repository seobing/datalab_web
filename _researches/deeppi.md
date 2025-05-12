---
layout: research
title: DeepPI
slug: deeppi
category: deeppi
date: 2024-02-03
permalink: /research/deeppi/
thumbnail: /~gangman/assets/images/research/deeppi/deeppi.png
description: Alignment‑Free Analysis of Flexible Length Proteins Based on Deep Learning and Image Generator
author: Mingeun Ji,Yejin Kan,Dongyeon Kim,Seungmin Lee,Gangman Yi
---

![DEEPPI](/~gangman/assets/images/research/deeppi/deeppi.png)

### DeepPI: Alignment‑Free Analysis of Flexible Length Proteins Based on Deep Learning and Image Generator

With the rapid development of NGS technology, the number of protein sequences has increased exponentially. Computational methods have been introduced in protein functional studies because the analysis of large numbers of proteins through biological experiments is costly and time-consuming. In recent years, new approaches based on deep learning have been proposed to overcome the limitations of conventional methods. Although deep learning-based methods effectively utilize features of protein function, they are limited to sequences of fixed-length and consider information from adjacent amino acids. Therefore, new protein analysis tools that extract functional features from proteins of flexible length and train models are required. We introduce DeepPI, a deep learning-based tool for analyzing proteins in large-scale database. The proposed model that utilizes Global Average Pooling is applied to proteins of flexible length and leads to reduced information loss compared to existing algorithms that use fixed sizes. The image generator converts a one-dimensional sequence into a distinct two-dimensional structure, which can extract common parts of various shapes. Finally, filtering techniques automatically detect representative data from the entire database and ensure coverage of large protein databases. We demonstrate that DeepPI has been successfully applied to large databases such as the Pfam-A database. Comparative experiments on four types of image generators illustrated the impact of structure on feature extraction. The filtering performance was verified by varying the parameter values and proved to be applicable to large databases. Compared to existing methods, DeepPI outperforms in family classification accuracy for protein function inference

