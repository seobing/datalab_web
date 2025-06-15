---
layout: research
title: SClassify
slug: sclassify
category: sclassify
type: paper
date: 2012-08-09
permalink: /research/sclassify/
description: Supervised Protein Family Classification and New Family Construction
author: Gangman Yi
---

### Supervised Protein Family Classification and New Family Construction

SClassify is a supervised protein family classification algorithm that overcomes the problems of existing supervised and unsupervised algorithms and achieves much improved accuracy. It can assign proteins to existing families in databases, and by taking into account similarities between the unclassified proteins, can assign them to new families.

### Installation

The SClassify source code, including sample input and output files, can be compiled under the Unix/Linux/Windows(Cygwin) environment. The following steps will create a directory called sclassify. Detailed usage of SClassify is provided in a README file.

- gunzip [sclassify.tar.gz](https://bigdata.dongguk.edu/~gangman/files/projects/sclassify.tar.gz)
- tar xvf sclassify.tar
- cd sclassify
- ./install

### How to use

The program assumes that e-values between each unclassified protein and each protein in existing families and e-values between each pair of unclassified proteins have already been obtained by other software such as BLAST or SSEARCH. The following files are needed:

1. A file that lists the name of each protein in existing families along with the name of its family in a two-column tab-separated format (example file: pfam.list).

2. A file that lists the name of each unclassified protein in a one-column format (example file: test.list).

3. A file that lists the e-values between each unclassified protein and each protein in existing families in a three-column tab-separated format that gives the name of an unclassified protein, the name of a protein in an existing family, and the e-value between them. There is no need to have an e-value for each pair if some of them are missing. The file is optional (example files: blast/test_pfam.score, ssearch/test_pfam.score).

4. A file that lists the e-values between each pair of unclassified proteins in a three-column tab-separated format that gives the names of two unclassified proteins and the e-value between them. There is no need to have an e-value for each pair if some of them are missing. The file is optional (example files: blast/test_test.score, ssearch/test_test.score).

**USAGE**  
./sclassify -c infile1 -u infile2 -p infile3 -n infile4 -e cutoff -o outfile  
where infile1 to infile4 are the input files described above, cutoff is the e-value cutoff, and outfile is the output file.

**EXAMPLES**
